<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Quiz;
use App\Models\GameUser;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    public function generate_code($length)
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        return $randomString;
    }
    public function store(Request $request)
    {
        $quizId = $request->quizId;
        if (!Auth::check()) return response()->json([
            'message' => 'User not connected',
            'status' => 'user-not-connected',
            "url" => "/login",
        ], 404);
        if (Quiz::where("id", $quizId)->get()->isEmpty()) return response()->json([
            'message' => 'Quiz not find',
            'status' => 'quiz-not-find'
        ], 404);
        $code = $this->generate_code(8);
        $game = Game::create([
            "code" =>  $code,
            "quizId" => $quizId,
            "hostId" => Auth::user()->id,
            "status" => 0
        ]);
        GameUser::create([
            "gameId" => $game->id,
            "status" => 0,
            "nickname" => Auth::user()->nickname
        ]);
        return response()->json([
            'message' => 'Quiz find',
            'status' => 'quiz-find',
            "url" => "/quiz/game/$quizId/$code",
        ], 200);
    }

    public function game($quizId, $code)
    {
        if (Game::where("code", $code)->get()->isEmpty()) return redirect("/");
        if (Auth::check()) {
            if (Game::where("code", $code)->get()->first()->hostId === Auth::user()->id) {
                return view("quiz/host", ["code" => $code, "userId" => Auth::user()->id, "nickname" => Auth::user()->nickname]);
            } else return view("quiz/home", ["nickname" => Auth::user()->nickname]);
        } else {
            if (Session::forget('gameUserId')) {
                $getGameUserById = GameUser::find(Session::forget('gameUserId'));
                return view("quiz/home", ["nickname" => $getGameUserById->first()->nickname]);
            } else redirect("/");
        }
    }

    public function getAllUsers()
    {
    }

    public function join(Request $request)
    {
        $getGame = Game::where("code", $request->code)->get();
        if ($getGame->isEmpty()) return redirect("/");
        $gameUser = GameUser::create([
            "gameId" => $getGame->first()->id,
            "status" => 0,
            "nickname" => Auth::check() ? Auth::user()->nickname : "Anonyme" . $this->generate_code(4)
        ]);
        if (!Auth::check()) Session::put("gameUserId", $gameUser->first()->id);
        return $this->game($getGame->first()->quizId, $getGame->first()->code);
    }
}
