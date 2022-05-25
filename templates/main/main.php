<?php include __DIR__ . '/../header.php'; ?>

<table class = "Contractors">
    <th>CompanyName</th>
    <th>CEO</th>
    <th>Contact</th>
    <th>Activity</th>
    <th>Region</th>
    <?php foreach ($articles as $oneContractor): ?>
    <tr>
        <td> <?php echo $oneContractor->getCompanyName(); ?> </td>
        <td> <?php echo $oneContractor->getCEO(); ?> </td>
        <td> <?php echo $oneContractor->getContact(); ?> </td>
        <td> <?php echo $oneContractor->getActivity(); ?> </td>
        <td> <?php echo $oneContractor->getRegion(); ?> </td>
        <?php endforeach; ?>
    </tr>
</table>

<?php include __DIR__ . '/../footer.php'; ?>
