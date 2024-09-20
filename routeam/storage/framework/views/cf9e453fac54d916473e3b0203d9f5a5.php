<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">

<div class='container' id="container">
    <form>
    <?php echo csrf_field(); ?>
        <div style="text-align: center; margin-top: 20px;">
            <input type="text" class="form-control" placeholder="Введите текст"
                style="display: inline-block;  width: 50%;" id="search" name="search"
                value="<?php echo e($query); ?>">
            <button class="btn btn-primary" style="vertical-align: inherit;" >Поиск</button>
        </div>
    </form>

    <div class="row" style="row-gap: 10px;">
        <?php if($result): ?>
            <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-3">
                    <div class="card h-100">
                        <div class="card-body" style="position: relative; z-index: 0;">
                            <a href="<?php echo e($val['html_url']); ?>"> </a>
                            <p class="card-title"><?php echo e($val['name']); ?></p>
                            <p class="card-text"><?php echo e($val['owner']); ?></p>
                            <p class="info-text">Кол-во звезд: <?php echo e($val['stargazers']); ?></p>
                            <p class="info-text">Просмотры: <?php echo e($val['watchers']); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

    </div>
</div>


<style>
    .card-title {
        font-size: 1.25rem;
    }

    .info-text {
        margin: 0;
        font-size: 10px;
    }

    a::before {
        position: absolute;
        content: '';
        inset: 0;
        z-index: -1;
    }

    .container {
        padding-bottom: 20px;
    }
</style>
<?php /**PATH C:\Apache24\htdocs\routeam\resources\views/search.blade.php ENDPATH**/ ?>