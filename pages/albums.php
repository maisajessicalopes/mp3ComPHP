<h1>Álbum</h1>

<a href="?page=new_album" class="btn btn-success">Adicionar Novo Álbum</a>

<hr>
<h1>teste</h1>
<div class="row">
    <?php
        $albums = getAlbums();

        // for ($i = 1; $i <= 10; $i++):
            foreach ($albums as $album):

                $infoAlbum = explode('/', $album);
                $nameAlbum = $infoAlbum[1];
                $imgAlbum = $album . '/' . $nameAlbum . '.jpeg';
    ?>
    <div class="col-3 album">
        <a href="?page=musics&album=<?=$nameAlbum?>">
            <img src="<?=$imgAlbum?>" alt="<?=$nameAlbum?>" class="img-album">
            <h4><?=$nameAlbum?></h4>
        </a>    
    </div>
    <?php
        endforeach
        // endfor;
    ?>
    
</div>