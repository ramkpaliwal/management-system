<?= $this->extend('components/layout') ?>

<?= $this->section('content'); ?>

<!-- Modal toggle -->
<div class="p-4 mt-14 sm:mr-8 sm:ml-64 sm:mt-14 flex justify-end">
    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
        class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-blue-800"
        type="button">
        ADD COURSE
    </button>
</div>

<!-- Main modal -->
<div id="authentication-modal" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button"
                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                data-modal-hide="authentication-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Add Course</h3>



                <!-- Form with method and action -->
                <form class="w-full max-w-xl" method="post" action="<?= base_url('/course'); ?>">
                    <div class="flex flex-wrap  -mx-3">
                        <div class="w-full md:full px-3 ">
                            <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
                                for="grid-first-name">
                                Course
                            </label>
                            <input
                                class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-first-name" name='c_name' type="text" placeholder="BCA">

                            <?php
                            if (isset($validation) && $validation->hasError('c_name')) {
                                echo $validation->getError('c_name');
                            }
                            ?>
                        </div>

                        <div class="w-full md:w-1/2 px-3 my-4">
                            <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
                                for="grid-last-name">
                                Department
                            </label>
                            <div class="relative">
                                <select
                                    class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-state" name='department'>
                                    <option value="" disabled selected>Choose option</option>
                                    <option value="IT">IT</option>
                                    <option value="LAW">LAW</option>
                                    <option value="MANAGEMENT">MANAGEMENT</option>
                                </select>

                            </div>
                        </div>

                        <div class="w-full md:w-1/2 px-3 my-4">
                            <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
                                for="grid-last-name">
                                Duration
                            </label>
                            <div class="relative">
                                <select
                                    class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-state" name="duration">
                                    <option value="" disabled selected>Choose option</option>
                                    <option value="1 years">1 years</option>
                                    <option value="2 years">2 years</option>
                                    <option value="3 years">3 years</option>
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="-mx-3 px-4 my-2">

                        <label for="message"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea id="message" rows="4"
                            class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            placeholder="Course Description..." name='description'></textarea>
                    </div>

                    <div class="-mx-3 px-4 my-8 flex justify-end items-center">
                        <button  type="submit"
                            class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-700 dark:hover:bg-gray-800 dark:focus:ring-gray-700 dark:border-gray-700 cursor-pointer">ADD</button>
                    </div>
            </div>

            </form>
        </div>
    </div>
</div>
</div>




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
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    1
                </th>
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
                    It is a technical course
                </td>
                <td class="px-6 py-4">
                    Active
                </td>

                <td class="flex items-center px-6 py-4 space-x-3">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</a>
                </td>
            </tr>

        </tbody>
    </table>
</div>


<?= $this->endSection(); ?>