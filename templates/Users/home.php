<?php
?>

<div>
    <ul class="flex_warp">
        <li class="un_list wd_10">
            アイコン
        </li>
        <li class="un_list wd_75">
            <ul>
                <li class="un_list">
                    <?= $this->Form->create() ?>
                    <?=
                        $this->Form->control('Twiit.value',[
                            'label' => false,
                            'placeholder' => 'いまどうしてる？？',
                            'templates' => [
                                'inputContainer' => '<div class="form-control wd_100">{{content}}</div>'
                            ]
                        ]);
                    ?>
                </li>
                <li class="un_list">
                    <?=
                        $this->Form->button('ツイートする', [
                            'type' => 'button'
                        ]);
                    ?>
                <?= $this->Form->end() ?>
                </li>
            </ul>

        </li>
    </ul>
</div>

<div>
    <ul class="flex_warp">
        <li class="un_list">
            アイコン
        </li>
        <li class="un_list">
            <ul>
                <li class="un_list">
                    名前
                </li>
                <li class="un_list">
                    ツイート内容
                </li>
                <li class="un_list">
                    いいね、コメント、リツイートボタン
                </li>
            </ul>
        </li>
    </ul>
</div>