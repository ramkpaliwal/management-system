<?= $this->extend('components/layout') ?>

<?= $this->section('content'); ?>


<div class="p-4 mt-14 sm:mr-8 sm:ml-64 sm:mt-14 flex justify-end">
    <a href="<?= base_url('student'); ?>" type="button"
        class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">BACK</a>
</div>

<div class="pr-16 mt-14 sm:mr-8 sm:ml-80 sm:mt-4 flex justify-center items-center">
    <div class="flex items-center justify-center shadow-lg px-8 py-4">
        <form class="w-full max-w-lg" method="post" action="addstudent">
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-first-name">
                        First Name
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-first-name" type="text" name="first_name" placeholder="Anurag">
                    <div class="pl-4 text-red-600">
                        <?php
                        if (isset($validation) && $validation->hasError('first_name')) {
                            echo $validation->getError('first_name');
                        }
                        ?>
                    </div>
                </div>

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-first-name">
                        Last Name
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-first-name" type="text" name="last_name" placeholder="Sharma">
                    <div class="pl-4 text-red-600">
                        <?php
                        if (isset($validation) && $validation->hasError('last_name')) {
                            echo $validation->getError('last_name');
                        }
                        ?>
                    </div>
                </div>




                <div class="w-full px-3 md:w-1/2 mt-4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        Qualification
                    </label>
                    <div class="relative">
                        <select
                            class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-state" name="qualification">
                            <option value="12th">12th</option>
                            <option value="Graduation">Graduation</option>
                        </select>
                    </div>
                    <div class="pl-4 text-red-600">
                        <?php
                        if (isset($validation) && $validation->hasError('qualification')) {
                            echo $validation->getError('qualification');
                        }
                        ?>
                    </div>
                </div>

                <div class="w-full px-3 md:w-1/2 mt-4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        Department
                    </label>
                    <div class="relative">
                        <select 
                            class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="department" name="department">
                            <?php foreach ($activeDepartments as $department): ?>
                                <option  value="<?= $department['id'] ?>"><?= $department['d_name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>


                <div class="w-full md:w-1/2 px-3 mt-4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        Course
                    </label>
                    <div class="relative">
                        <select
                            class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="course" name="course">
                            <?php foreach ($activeCourses as $course): ?>
                                <option value="<?= $course['id'] ?>"><?= $course['c_name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
          




             <div class="w-full md:w-1/2 px-3 mt-4 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Phone Number
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-first-name" type="text" name="mob_no" placeholder="8815138708">
                <div class="pl-4 text-red-600">
                    <?php
                    if (isset($validation) && $validation->hasError('mob_no')) {
                        echo $validation->getError('mob_no');
                    }
                    ?>
                </div>
            </div>

            <div class="w-full md:w-1/2 px-3 mt-4 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Hobby
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-first-name" type="text" name="hobby" placeholder="Cricket">
                <div class="pl-4 text-red-600">
                    <?php
                    if (isset($validation) && $validation->hasError('hobby')) {
                        echo $validation->getError('hobby');
                    }
                    ?>
                </div>
            </div>


            <div class="w-full md:w-1/2 px-3 mt-4 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Email
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-first-name" type="email" name="email" placeholder="anu@gmail.com">
                <div class="pl-4 text-red-600">
                    <?php
                    if (isset($validation) && $validation->hasError('email')) {
                        echo $validation->getError('email');
                    }
                    ?>
                </div>
            </div>

            <div class="w-full px-3 py-4">
                <label for="message" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                    Address</label>
                <textarea id="message" rows="4"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    placeholder="Address" name="address"></textarea>
                <div class="pl-4 text-red-600">
                    <?php
                    if (isset($validation) && $validation->hasError('address')) {
                        echo $validation->getError('address');
                    }
                    ?>
                </div>

            </div>
            <div class="pl-4">
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit</button>
            </div>
    </div>
    </form>
</div>
</div>

<script>
    let departmentSelect = document.getElementById('department');
    departmentSelect.addEventListener('change', function handle(event){
        console.log(event.target.value);
        let id = event.target.value;
        // getCoursesByDepartment(event.target.value);
        let courseByDepartment = fetch(`/getCourseByDepartment/${id}`).then(res => res.json()).then(data => 
        {
            console.log(data);
            let courseOption = document.getElementById('course');
            courseOption.innerHTML = ``;
            data.forEach(element => {
                courseOption.innerHTML += `<option value="${element.id}">${element.c_name}</option>`
            });
        })
    });
    // function getCoursesByDepartment(id){
    //     let courseByDepartment = fetch(`/getCourseByDepartment/${id}`).then(res => res.json()).then(data => 
    //     {
    //         console.log(data);
    //         let courseOption = document.getElementById('course');
    //         courseOption.innerHTML = ``;
    //         data.forEach(element => {
    //             courseOption.innerHTML += `<option value="${element.id}">${element.c_name}</option>`
    //         });
    //     })

    // }
    </script>


<?= $this->endSection(); ?>