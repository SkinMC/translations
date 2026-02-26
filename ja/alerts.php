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
        'title' => '新たなフォロワー',
        'text' => ':userさんがあなたをフォローされました！',
    ],
    'comment' => [
        'new' => [
            'title' => ':model コメント',
            'text' => ':userさんが:modelにコメントしました',
        ],
        'reply' => [
            'title' => ':modelのコメントへの返信',
            'text' => ':userさんが:modelコメントに返信しました',
        ],
        'mention' => [
            'title' => 'New mention',
            'text' => ':user mentioned you in a comment!',
        ],
        'like' => [
            'title' => 'Comment liked',
            'text' => ':user liked your comment!',
        ],
    ],
    'post' => [
        'like' => [
            'title' => 'いいね！を受け取りました！',
            'text' => ':userがあなたの投稿にいいね！しました！',
        ],
        'mention' => [
            'title' => '新たな返信',
            'text' => ':userさんがあなたについて投稿しました！',
        ],
        'repost' => [
            'title' => 'Repost',
            'text' => ':user reposted your post!',
        ],
    ],
    'level' => [
        'up' => [
            'title' => 'レベルアップ！',
            'text' => 'おめでとうございます :levelに到達しました！',
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
            'title' => 'あなたのレポートをレビューしました! (ケース:id)',
            'text' => '私たちがすぐに調査します。物事を冷静に保つのを協力してくれてありがとう！ ',
        ],
        'resolved' => [
            'title' => 'あなたのレポートをレビューしました (ケース:id)',
            'text' => 'こんにちは、あなたが報告された問題は処理され、現在ソートされています。私たち、コミュニティのスーパーヒーローになっていただきありがとうございます！',
        ],
        'dismissed' => [
            'title' => 'レポートの更新 (ケース:id)',
            'text' => 'いくつかの調査の結果、ご報告いただいた内容はガイドラインに反していないことがわかりました。具体的な内容を確認してほしい場合は、必ずスキンやプロフィールなどを報告してください。私たちのコミュニティへの関心と参加に感謝します！',
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
    'streak' => [
        'at_risk' => [
            'title' => ':days-day streak at risk',
            'text_send_now' => 'Send a message before midnight UTC to keep your streak alive.',
            'text_waiting_other' => 'You replied today. You still need one reply back before midnight UTC.',
        ],
    ],
];
