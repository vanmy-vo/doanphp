<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <style>
            #PageControl {
                margin: 0 auto;
                padding: 0;
            }

            .pageButton {
                display: block;
                margin: 0 5px 0 0;
                padding: 5px 10px;
                border: 1px solid #ccc;
                border-radius: 4px;
                cursor: pointer;
                font-size: 13px;
                float: left;
                background: #fff;
            }

                .pageButton:hover {
                    border: 1px solid #333;
                    background: #666;
                    color: #fff;
                }

            #LastPage {
                margin: 0;
            }

            #PageNumber {
                display: block;
                text-align: center;
                margin: 0 5px 0 0;
                padding: 6px 10px !important;
                width: 80px;
                height: unset;
                border-radius: 4px;
                font-size: 13px;
                float: left;
            }

            p.ItemPP {
                float: left;
                margin: 0 0 0 20px;
                padding: 0;
                font-size: 13px;
                line-height: 1;
            }

                p.ItemPP span {
                    display: inline-block;
                }

                p.ItemPP select {
                    display: inline-block;
                    padding: 6px 10px !important;
                    width: 70px;
                    height: unset;
                    border-radius: 4px;
                }
                li.disabled {
                    pointer-events: none;
                    cursor: default;
                }
        </style>
        <?php if ($list->hasPages()) { ?>
        <ul class="pagination">
            <?php if ($list->onFirstPage()) { ?>
            <li class="disabled"><a href="#"><span aria-hidden="true">First</span></a></li>
            <?php } else { ?>
            <li><a href="{{ $paginator->toArray()['first_page_url'] }}"><span aria-hidden="true">First</span></a></li>
            <?php } ?>


            <?php if ($list->onFirstPage()) { ?>
            <li class="disabled"><a href="#"><span aria-hidden="true">&laquo;</span></a></li>
            <?php } else { ?>
            <li><a href="<?=$list->previousPageUrl()?>"><span aria-hidden="true">&laquo;</span></a></li>
            <?php } ?>

            <?php foreach ($elements as $value) : ?>
                
                <?php if (is_string($value)) : ?> 
                <li><a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a></li>
                <?php endif; ?>

                <?php if (is_array($value)) : ?>
                    <?php foreach ($value as $page => $url) : ?>
                        <?php if ($page == $list->currentPage()) : ?>
                        <li class="active"><a href=""><?= $page ?></a></li>
                        <?php else : ?>
                        <li><a href="<?= $url ?>"><?= $page ?></a></li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            
            <?php endforeach; ?>


            <?php if (!$list->hasMorePages()) { ?>            
            <li class="disabled"><a href="#"><span aria-hidden="true">&raquo;</span></a></li>
            <?php } else { ?>
            <li><a href="<?=$list->nextPageUrl()?>"><span aria-hidden="true">&raquo;</span></a></li>
            <?php } ?>

            <?php if (!$list->hasMorePages()) { ?>            
            <li class="disabled"><a href="#"><span aria-hidden="true">Last</span></a></li>
            <?php } else { ?>
            <li><a href="baiviet?page=<?=$list->lastPage()?>"><span aria-hidden="true">Last</span></a></li>
            <?php } ?>
        </ul>
        <?php } ?>
        <!-- <div id="PageControl">
            <span class="pageButton" id="FirstPage" onclick="GoToPage(1)">
                <i class="fa fa-step-backward" aria-hidden="true"></i>
            </span>
            <span class="pageButton" id="PreviousPage" onclick="GoToPage(0)">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </span>
            <select id="PageNumber" class="form-control">
                        <option value="1" selected="selected">1</option>
            </select>
            <span class="pageButton" id="NextPage" onclick="GoToPage(2)">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </span>
            <span class="pageButton" id="LastPage" onclick="GoToPage(1)">
                <i class="fa fa-step-forward" aria-hidden="true"></i>
            </span>
            <p class="ItemPP">
                <span style="margin-right:5px">
                    Số lượng
                </span>
                <select id="ItemPerPage" class="form-control">
                    <option value="20" selected="">20</option>
                    <option value="40">40</option>
                    <option value="80">80</option>
                    <option value="160">160</option>
                </select>
                <span style="margin-left:5px">Tài khoản / trang </span>
            </p>
            <div class="clear"></div>
        </div> -->
    </div>
</div>