<ul class="screen">
    <li class="screen_1 aqua5">
        <h1>#Structure</h1>

        <div class="tree">
            <div class="tree-single">
                <div class="image"></div>
                <div class="buttons"></div>
            </div>
            <div class="tree-single">qwerqwewqer qwerqwer qwerqwerertyret ertyerty ert ertyert ye erty erty ertye rtyerty rteyret yredfghdfgh dfghdfghd fghdfghd fghdfghdfg hdfghdfg h</div>
            <div class="tree-single">qwerqwewqer qwerqwer qwerqwer</div>
            <div class="tree-single">qwerqwewqer qwerqwer qwerqwer</div>
            <div class="tree-single">qwerqwewqer qwerqwer qwerqwer ertyerty retyerty ertyerty ertyertyertyedfghdfgh dfghdfgh dfghdfghd fghfdgh fdghfghgdf hdfghd fghdfgh dfghdfgh dfh</div>
            <div class="tree-single">qwerqwewqer qwerqwer qwerqwer</div>
        </div>



        <div class="tree ">
            <table>
                <tr>
                    <th>Tree</th>
                    <th>Actions</th>
                    <th>Statistic</th>
                </tr>

                <?if(!empty($data['category'])){?>
                    <?foreach($data['category'] as $i){?>
                        <tr>
                            <td style="padding-left: <?=$i['level']*10?>px"><?=$i['name']?></td>

                            <td>qwerwqerwer</td>

                            <td>
                                <span class="s purple">s1</span>
                                <span class="s orange">s2f</span>
                                <span class="s blue">s3fg</span>
                                <span class="s green">s4fgfg</span>
                                <span class="s pink">s5fgfgfg</span>
                            </td>
                        </tr>
                    <?}?>
                <?}?>

            </table>
        </div>
        SCREEN 1
    </li>
    <li class="screen_2">
        SCREEN 2
    </li>
    <li class="screen_3">
        SCREEN 3
    </li>
</ul>