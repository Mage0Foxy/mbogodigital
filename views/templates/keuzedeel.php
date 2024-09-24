<!DOCTYPE html>
<html lang="nl">


<body>

    <div class="mt-6 mb-16 w-11/12 p-6 space-y-8 sm:p-8 bg-white mx-auto">


        <h3 class="text-xl font-bold ">Overzicht van onze keuzedelen</h3>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            code
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Keuzedeel
                        </th>
                        <th scope="col" class="px-6 py-3">
                            sbu
                        </th>
                        <th scope="col" class="px-6 py-3">
                            description
                        </th>
                        <th scope="col" class="px-6 py-3">
                            goalsDescription
                        </th>
                        <th scope="col" class="px-6 py-3">
                            precondition
                        </th>
                        <th scope="col" class="px-6 py-3">
                            certificate
                        </th>
                        <th scope="col" class="px-6 py-3">
                            linkVideo
                        </th>
                        <th scope="col" class="px-6 py-3">
                            linkKD
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($keuzedeels as $keuzedeel) {
                        ?>
                        <tr
                            class="odd:bg-white even:bg-gray-50 border-b ">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                <?php echo $keuzedeel["code"]; ?>
                            </th>
                            <td class="px-6 py-4">
                                <?php echo $keuzedeel["title"]; ?>
                            </td>
                            <td class="px-6 py-4">
                                sbu <?php echo $keuzedeel["sbu"]; ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $keuzedeel["description"]; ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $keuzedeel["goalsDescription"]; ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $keuzedeel["precondition"]; ?>
                            </td>
                            <td class="px-6 py-4">
                                certificate <?php echo $keuzedeel["certificate"]; ?>
                            </td>
                            <td class="px-6 py-4">
                                link <?php echo $keuzedeel["linkVideo"]; ?>
                            </td>
                            <td class="px-6 py-4">
                                link <?php echo $keuzedeel["linkKD"]; ?>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>


    </div>


</body>

</html>