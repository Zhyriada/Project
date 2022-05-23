<?php include __DIR__ . '/../header.php'; ?>

<table class = "Contractors">
    <th>CompanyName</th>
    <th>CEO</th>
    <th>Contact</th>
    <th>Activity</th>
    <th>Region</th>
    <?php foreach ($articles as $oneContractor): ?>
    <tr>
        <td> <?php echo $oneContractor['CompanyName']; ?> </td>
        <td> <?php echo $oneContractor['CEO']; ?> </td>
        <td> <?php echo $oneContractor['Contact']; ?> </td>
        <td> <?php echo $oneContractor['Activity']; ?> </td>
        <td> <?php echo $oneContractor['Region']; ?> </td>
        <?php endforeach; ?>
    </tr>
</table>

<?php include __DIR__ . '/../footer.php'; ?>
