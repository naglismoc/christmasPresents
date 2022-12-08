<thead>
    <tr>
    <th scope="col">Dovalėnė</th>
    <th scope="col">Kaina</th>
    <th scope="col">Supakuota</th>
    <th scope="col">redaguoti</th>
    <th scope="col">trinti</th>
    </tr>
</thead>
<tbody>
    <?php foreach ($presents as $present) { ?>
    <tr>
        <td><?=$present->presentTitle?></td>
        <td><?=$present->price?></td>
        <td><?=   ($present->wrapped) ? "taip" : "ne"    ?></td>
        <td>
        <form action="" method="GET">
                <input type="hidden" name="id" value="<?=$present->id?>">
                <button class="btn btn-success" name="edit" type="submit">redaguoti</button>
            </form>
        </td>
        <td>
            <form action="" method="POST">
                <input type="hidden" name="id" value="<?=$present->id?>">
                <button class="btn btn-danger" name="destroy" type="submit">trinti</button>
            </form>
        </td>
    </tr>
    <?php } ?>
</tbody>