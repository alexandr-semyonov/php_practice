<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lesson 2 php</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">                
            <h1>Lesson 2 PHP</h1>
                <h2>Anchors on files</h2>
                <ul class="list-of-anchors">
                <li><a href="discriminant.php">discriminant.php</a></li>
                <li><a href="genderofname.php">genderofname.php</a></li>
                <li><a href="tableoftrue.php">tableoftrue.php</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h2>Collapse buttons</h2>
                <ul class="solutions">
                    <li><a class="btn btn-primary" data-toggle="collapse" href="#collapseDiscriminant" role="button" aria-expanded="false" aria-controls="collapseDiscriminant">Quadratic Solution</a></li>
                    <li><a class="btn btn-primary" data-toggle="collapse" href="#collapseGenderByName" role="button" aria-expanded="false" aria-controls="collapseGenderByName">Gender by name</a></li>
                    <li><a class="btn btn-primary" data-toggle="collapse" href="#collapseTableOfTrue" role="button" aria-expanded="false" aria-controls="collapseTableOfTrue">Table of true</a></li>
                </ul>
            </div>
        </div>
        <div class="collapse" id="collapseDiscriminant">
            <div class="card card-body">
                <?php 
                    include_once __DIR__ . '/discriminant.php'; 
                ?>
            </div>
        </div>
        <div class="collapse" id="collapseGenderByName">
            <div class="card card-body">
                <?php 
                    include_once __DIR__ . '/genderofname.php'; 
                ?>
            </div>
        </div>
        <div class="collapse" id="collapseTableOfTrue">
            <div class="card card-body">
                <?php 
                    include_once __DIR__ . '/tableoftrue.php'; 
                ?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>