<?php /* @var \App\Models\Houses[] $data */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b555355c37.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="img/logo.jpg">
    <title>Home</title>
</head>
<body class="body">

<div class="textpadding" id="Onas">
    <h1 class="center">Spoločnosť DREVODOMY Slovakia, s.r.o.</h1>
    <p>
        Vlastný výrobný závod, v ktorom sa drevostavby vyrábajú od roku 1955. Viac ako 60 – ročná tradícia a prax v oblasti výroby a
        montáže zrubových domov a chát je zárukou toho, že od nás dostanete kvalitný výrobok za prijateľnú cenu.
    </p>
    <h5>Naša firma vyrába:</h5>
    <ul>
        <li>drevené zrubové domy určené pre celoročné bývanie</li>
        <li>drevené zrubové rekreačné chaty</li>
        <li>montované domy</li>
        <li>atypické stavby</li>
    </ul>
    <p>Naše drevostavby sú zrealizoavné vo viacerých štátoch Európy ako napríklad Nemecko, Belgicko,
        Holandsko, Španielsko, Francúzsko, Česká republika …
    </p>
</div>

<h1 class="textpadding center">Nasa Ponuka</h1>
<!--    databaza-->
<?php foreach ($data as $row) { ?>
<div class="card mb-3" >
    <img src="<?=$row->getFoto()?>" class="card-img-top" alt="Duben">
    <div class="card-body">
        <h5 class="card-title"><?=$row->getNazov()?></h5>
        <p class="card-text"><?=$row->getPopis()?></p>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
            Viac info
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel1"><?=$row->getNazov()?></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?=$row->getInfo()?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>


<div class="wraper">
    <!--    <img class="image" src="https://scontent-vie1-1.xx.fbcdn.net/v/t39.30808-6/240797087_4471562862910251_1814622373591899848_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=e3f864&_nc_ohc=4pO4d55r2skAX-N58or&_nc_ht=scontent-vie1-1.xx&oh=00_AT8qJAmijdhGlI3cGzo8Ru7TgKEnRYYGOE9wMJOEsCTzVw&oe=634F1EE5">-->
    <div class="backgroundimg"></div>
    <div class="textmiddle">
        <div class="text"><a href="?c=contact" class="links">Zaujala vas ponuka? Konktaktujte nas</a></div>
    </div>
</div>



</body>
</html>