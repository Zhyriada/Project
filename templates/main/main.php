<?php include __DIR__ . '/../header.php'; ?>

<?php
//где размещаем код, который ниже??? в индекс.пхп?
$contractors =
    [
        [
            'CompanyName' => 'Zavod',
            'CEO' => 'Kateryna',
            'Contact' => '09765754**',
            'Activity' => 'Production POSM',
            'Region' => 'all of Ukraine'
        ],
        [
            'CompanyName' => 'Freedom',
            'CEO' => 'Anastasiya',
            'Contact' => '09360121**',
            'Activity' => 'Design 2D, 3D',
            'Region' => 'all of Ukraine'
        ],
        [
            'CompanyName' => 'BDH',
            'CEO' => 'Eduard',
            'Contact' => '09324580**',
            'Activity' => 'Advertising Agency',
            'Region' => 'all of Ukraine'
        ],
        [
            'CompanyName' => 'Building',
            'CEO' => 'Dmytro',
            'Contact' => '06732814**',
            'Activity' => 'Construction',
            'Region' => 'all of Ukraine'
        ],
        [
            'CompanyName' => 'Photos',
            'CEO' => 'Artem',
            'Contact' => '09305023**',
            'Activity' => 'Photo',
            'Region' => 'Kyiv'
        ],
        [
            'CompanyName' => 'Staff',
            'CEO' => 'Maryna',
            'Contact' => '09353700**',
            'Activity' => 'Recruitment',
            'Region' => 'all of Ukraine'
        ],
    ];
?>

<table class = "Contractors">
    <th>CompanyName</th>
    <th>CEO</th>
    <th>Contact</th>
    <th>Activity</th>
    <th>Region</th>
    <?php foreach ($contractors as $oneContractor): ?>
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
