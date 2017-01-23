        <!-- Middle Column -->
        <style>
            em.comment {
                margin-left: 4em;
            }
        </style>
        <div id="forFogging">

        </div>
        <div class="w3-col m7">

            <div class="w3-row-padding">
                <div class="w3-col m12">
                    <div class="w3-card-2 w3-round w3-white">
                        <div id="addAlbumBlock">
                            <a id="cancelAlbumBlock" href="#"><img src="/public/pictures/icon/cancel.png" alt="cancel"></a>
                            <form action="http://ts.local/albums/insert/" method="post" enctype="multipart/form-data">
                                <label for="albumName">Album name: </label>
                                <input type="text" id="albumName" name="albumName" placeholder="Name" title="Name">
                                <input type="submit" value="Submit">
                                <input type="reset" value="Reset">
                            </form>
                        </div>
                        <div class="w3-container w3-padding">
                            <a href="#" id="addAlbum" class="w3-btn w3-theme"><i class="fa fa-pencil"></i>   Add album</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            foreach ($userAlbums as $oneUserAlbum):?>
                <?php
                $count = count($oneUserAlbum->album->albumPhoto);
                $date = substr($oneUserAlbum->album->createdAt, 0, 10);
                ?>
                <div class="blockAlbum w3-container w3-card-2 w3-white w3-round w3-margin">
                    <a href="/album/<?=$oneUserAlbum->album->id;?>"><p><h3><?=$oneUserAlbum->album->name;?></h3></p></a>
                    <a class="deleteAlbum" href="http://ts.local/albums/delete/<?=$oneUserAlbum->album->id;?>"><img src="/public/pictures/icon/cancel.png" alt="delete"></a>
                    <?php if(isset($oneUserAlbum->album->albumPhoto[0])):?>
                        <img src="/public/photos/<?=$oneUserAlbum->album->albumPhoto[0]->fileName;?>" class="photoOnAlbum w3-margin-bottom">
                    <?php endif;?>
                    <ul>
                        <li>Фотографий: <?=$count?></li>
                        <li>Комментариев: 128</li>
                        <li>Дата добавления: <br><?=$date?></li>
                    </ul>
                </div>
            <?php endforeach;?>


            <!-- End Middle Column -->
        </div>
