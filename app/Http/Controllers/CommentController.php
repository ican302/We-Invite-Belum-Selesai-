<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Invitation;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Invitation $invitation)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Comment::create([
            'invitation_id' => $invitation->id,
            'name' => $request->name,
            'message' => $request->message,
            'active' => true,
        ]);

        return redirect()->back()->with('success', 'Ucapan berhasil ditambahkan');
    }

    public function toggleStatus(Invitation $invitation)
    {
        $invitation->comments_enabled = !$invitation->comments_enabled;
        $invitation->save();

        return redirect()->back()->with('success', 'Status ucapan berhasil diubah')->withFragment('ucapan-doa');
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();

        return redirect()->back()->with('success', 'Ucapan berhasil dihapus')->withFragment('ucapan-doa');
    }
}
