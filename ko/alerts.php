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
        'title' => '새로운 팔로워',
        'text' => ':user님이 팔로우 하고 있습니다!'
    ],
    'comment' => [
        'new' => [
            'title' => ':model에 댓글 작성되었습니다.',
            'text' => ':user님이 :model에 댓글을 작성했어요'
        ],
        'reply' => [
            'title' => ':model에 답글 작성됨',
            'text' => ':user님이 :model에 답글을 작성했어요'
        ],
        'like' => [
            'title' => 'Comment liked',
            'text' => ':user liked your comment!'
        ]
    ],
    'post' => [
        'like' => [
            'title' => '좋아요를 받음',
            'text' => ':user님이 내 포스트에 좋아요를 달았어요!',
        ],
        'mention' => [
            'title' => '새 언급',
            'text' => ':user님이 작성한 포스트에 나를 언급했어요!'
        ],
        'repost' => [
            'title' => 'Repost',
            'text' => ':user reposted your post!'
        ]
    ],
    'level' => [
        'up' => [
            'title' => '당신의 레벨이 올랐습니다!',
            'text' => ':level레벨에 도달하신 것을 축하드려요!'
        ]
    ],
    'report' => [
        'created' => [
            'title' => '신고를 접수했어요!(케이스 :id)',
            'text' => '팀이 검토를 시작했습니다 인내를 가지고 기다려 주십시오 '
        ],
        'resolved' => [
            'title' => '신고가 확인되었습니다(케이스 :id)',
            'text' => '안녕하세요 신고하신 문제에 대해 조치가 취해졌습니다. 귀하에 도움에 감사드립니다.',
        ],
        'dismissed' => [
            'title' => '신고 내용에 변경 사항이 있습니다(케이스 :id)',
            'text' => '신고 하신 내용을 검토 해 보았으나 별 다른 문제를 발견하지 못했습니다. 또 다른 문제를 발견하신다면 제보 부탁드립니다. 커뮤니티에 관심을 가져주셔 감사드립니다.',
        ]
    ]
];
