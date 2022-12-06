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
        <td><button class="btn btn-success" type="submit">redaguoti</button></td>
        <td><button class="btn btn-danger" type="submit">trinti</button></td>
    </tr>
    <?php } ?>
</tbody>