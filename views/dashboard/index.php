<form>
    <div class="row my-4">
        <div class="mx-4">
            <div class="my-2">Дата решения с</div>
            <input type="date" name="date-satart" id="date-satart" value="<?= $dateStart ?>" onchange="this.form.submit()">
        </div>
        <div class="mx-4">
            <div class="my-2">Дата решения по</div>
            <input type="date" name="date-end" value="<?= $dateEnd ?>" onchange="this.form.submit()">
        </div>
    </div>
</form>



<table class="table">
    <thead>
        <tr>
            <th scope='col'>Менеджер</th>
            <?php foreach ($categoryList as  $category) {
                echo "<th  class='text-center' scope='col'>" . $category['title'] . "</th>";
            } ?>
            <th scope='col' class='text-center'>Всего</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($managerStatisticList as $manager) {
            $allTickets = 0;
            echo "<tr>";
            echo "<th scope='row'>" . $manager['name'] . "</th>";
            foreach ($categoryList as $category) {
                $countTicketsCategory = $manager['statistic_category'][$category['id']] ?? 0;
                $allTickets += $countTicketsCategory;
                echo "<td class='text-center' >" . $countTicketsCategory . "</td>";
            }
            echo "<th class='text-center' >" .  $allTickets . "</th>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>