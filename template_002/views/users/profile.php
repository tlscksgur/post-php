<section>
    <h2>Profile</h2>
    <?= $id ?>
    

    <form action="/users/profile?id=<?= $id ?>" method="post">
        <button>Move POST</button>
    </form> 
</section>