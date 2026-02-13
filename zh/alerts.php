<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Alerts (Notifications) Lines
    |--------------------------------------------------------------------------
    |
    |
    */
    'follower' => [
        'title' => '有新的关注者',
        'text' => ':user 刚刚关注了你！',
    ],
    'comment' => [
        'new' => [
            'title' => ':model 评论',
            'text' => ':user 对你的 :model 发表了评论',
        ],
        'reply' => [
            'title' => '对 :model 评论的回复',
            'text' => ':user 回复了一个 :model 评论',
        ],
        'like' => [
            'title' => 'Comment liked',
            'text' => ':user liked your comment!',
        ],
    ],
    'post' => [
        'like' => [
            'title' => '收到点赞',
            'text' => ':user 赞了你的帖子！',
        ],
        'mention' => [
            'title' => '新提及我的',
            'text' => ':user 在他们的帖子中提到了你！',
        ],
        'repost' => [
            'title' => 'Repost',
            'text' => ':user reposted your post!',
        ],
    ],
    'level' => [
        'up' => [
            'title' => '你升级了!',
            'text' => '恭喜您已达到等级 :level！',
        ],
    ],
    'board' => [
        'collaborator_added' => [
            'title' => 'Added to a board',
            'text' => ':user added you as a collaborator to the board ":board".',
        ],
    ],
    'report' => [
        'created' => [
            'title' => '我们已收到您的举报！ (案件:id)',
            'text' => '我们的团队将努力以最快的速度进行调查，感谢您的出色表现，请不要着急。 ',
        ],
        'resolved' => [
            'title' => '我们审查了您的报告(案件:id)',
            'text' => '您好，举报的问题已经得到处理，现在已经解决了。感谢您成为我们社区的超级英雄！',
        ],
        'dismissed' => [
            'title' => '更新您的举报 (案件 :id)',
            'text' => '在一些侦测工作之后，我们发现您报告的内容不符合我们的准则。 如果你想要我们审查某些具体内容，请确保你报告皮肤、个人资料等，并且在需要时提供额外的上下文信息。 感谢你对我们社区的关心和参与！',
        ],
    ],
    'server' => [
        'review_received' => [
            'title' => 'New review on :server',
            'text' => 'Your listing ":server" received a new review (:rating/5).',
        ],
        'low_rating' => [
            'title' => 'Rating dropped for :server',
            'text' => 'Your average rating is now :rating/5 across :reviews reviews. Consider reviewing feedback in Insights.',
        ],
        'vote_milestone' => [
            'title' => 'Vote milestone reached',
            'text' => ':server reached :votes votes in the last 30 days.',
        ],
        'approved' => [
            'title' => ':server was approved',
            'text' => 'Your listing passed review and is now eligible to go live once all requirements are met.',
        ],
        'unapproved' => [
            'title' => ':server needs updates',
            'text' => 'Your listing was moved out of approved status. Review your listing details and update as needed.',
        ],
        'published' => [
            'title' => ':server is now live',
            'text' => 'Your listing is published and visible on the server list.',
        ],
        'unpublished' => [
            'title' => ':server was unpublished',
            'text' => 'Your listing is no longer visible publicly. Review listing status in your dashboard.',
        ],
        'verified' => [
            'title' => ':server is now verified',
            'text' => 'Your listing received a verification badge.',
        ],
        'photo_requirement_complete' => [
            'title' => 'Photo requirement complete for :server',
            'published_text' => 'You now have at least 5 images and your listing is live again.',
            'pending_text' => 'You now have at least 5 images. Your listing is ready for moderation.',
        ],
        'photo_requirement_missing' => [
            'title' => 'Add more photos to :server',
            'text' => 'Your listing needs :remaining more photo(s) to reach the minimum of :minimum and stay publishable.',
        ],
        'reminder_no_images' => [
            'title' => 'Your server listing still has no photos',
            'text' => 'Add at least 5 photos to improve trust and move your listing toward publication.',
        ],
        'reminder_pending_too_long' => [
            'title' => 'Your listing is still pending review',
            'text' => 'Your listing has been pending for a while. Double-check details and photos to help keep review smooth.',
        ],
    ],
];
