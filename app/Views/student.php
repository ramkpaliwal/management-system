<?= $this->extend('components/layout') ?>

<?= $this->section('content'); ?>

<div class="p-4 mt-14 sm:mr-8 sm:ml-64 sm:mt-14 flex justify-end">
    <a href="<?= base_url('addstudent'); ?>" type="button"
        class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">ADD
        STUDENT</a>
</div>


<div class="relative overflow-x-auto shadow-md sm:rounded-lg sm:ml-80 sm:mr-8">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Qualification
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
                    Hobby
                </th>
                <th scope="col" class="px-6 py-3">
                    Phone no.
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Address
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
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    1
                </th>
                <td class="px-6 py-4">
                    Anurag Sharma
                </td>
                <td class="px-6 py-4">
                    12th
                </td>
                <td class="px-6 py-4">
                    BCA
                </td>
                <td class="px-6 py-4">
                    IT
                </td>
                <td class="px-6 py-4">
                    3 years
                </td>
                <td class="px-6 py-4">
                    Gaming
                </td>
                <td class="px-6 py-4">
                    8815138708
                </td>
                <td class="px-6 py-4">
                    anu@gmail.com
                </td>
                <td class="px-6 py-4">
                    Gwalior
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center">
                        <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div> Active
                    </div>
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>

        </tbody>
    </table>
</div>


<?= $this->endSection(); ?>