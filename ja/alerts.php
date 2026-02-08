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
];
