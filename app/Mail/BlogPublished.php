<?php

namespace App\Mail;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BlogPublished extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    protected $blog;
    protected $user;

    /**
     * Create a new message instance.
     *
     * @param Blog $blog
     * @param User $user
     */
    public function __construct(Blog $blog, User $user)
    {
        $this->blog =$blog;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->from(env('MAIL_FROM_ADDRESS', env('MAIL_FROM_NAME')))
        ->subject('Our New Blog Is Publish')
        ->view('email.newBlog')
        ->with([
            'user'=>$this->user,
            'blog'=>$this->blog
        ]);
        return  $this;
    }
}
