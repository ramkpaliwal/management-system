<?= $this->extend('components/layout') ?>

<?= $this->section('content'); ?>


<div class="p-4 mt-14 sm:mr-8 sm:ml-64 sm:mt-14 flex justify-end">
    <a href="<?= base_url('addcourse'); ?>" type="button"
        class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">CREATE
        COURSE</a>
</div>
<?php

if (!empty($session->getflashdata('success'))) {
    ?>
    <div id="toast-success"
        class=" sm:ml-96 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
        role="alert">
        <div
            class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            <span class="sr-only">Check icon</span>
        </div>

        <div class="ml-3 text-sm font-normal">
            <?= ($session->getflashdata('success')); ?>
        </div>
        <button type="button"
            class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
            data-dismiss-target="#toast-success" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
        </button>
    </div>


    <script>
        // Use JavaScript to remove the success message after 2 seconds
        setTimeout(function () {
            var toastSuccess = document.getElementById('toast-success');
            if (toastSuccess) {
                toastSuccess.remove();
            }
        }, 2000); // 2000 milliseconds = 2 seconds
    </script>
    <?php
}
?>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg sm:ml-80 sm:mr-8">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>

                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Course
                </th>
                <th scope="col" class="px-6 py-3">
                    Department
                </th>
                <th scope="col" class="px-6 py-3">
                    Duration
                </th>
                <th scope="col" class="px-6 py-3">
                    Description
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
        <?php $id = 0; ?>
            <?php if (!empty($courses)) {

                foreach ($courses as $course) {

                    ?>

                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?= $id + 1; ?>
                        </th>
                        <td class="px-6 py-4">
                            <?= $course['c_name']; ?>
                        </td>
                        <td class="px-6 py-4">
                            <?= $course['department_name']; ?>
                        </td>
                        <td class="px-6 py-4">
                            <?= $course['duration']; ?>
                        </td>
                        <td class="px-6 py-4">
                            <?= $course['description']; ?>
                        </td>
                        <td class="px-6 py-4">
                            <a href="<?= base_url('deletecourse/' . $course['id']);?>" class="flex items-center">
                            
                                <?php if ($course['status'] == 'active') { ?>
                                    <div class="h-2.5 w-2.5 rounded-full bg-green-600 mr-2"></div> Active
                                <?php } else { ?>
                                    <div class="h-2.5 w-2.5 rounded-full bg-red-600 mr-2"></div> Inactive
                                <?php } ?>
                            </a>

                        </td>

                        <td class="flex items-center px-6 py-4 space-x-3">
                            <a href="<?= base_url('editcourse/' . $course['id']); ?> " class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</>
                            <!-- <a href="<?= base_url('deletecourse/' . $course['id']);?>" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a> -->
                        </td>
                    </tr>
                    <?php $id++; ?>
                <?php }
            } ?>

        </tbody>
    </table>
</div>


<?= $this->endSection(); ?>