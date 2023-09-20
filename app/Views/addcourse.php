<?= $this->extend('components/layout') ?>

<?= $this->section('content'); ?>


<div class="p-4 mt-14 sm:mr-8 sm:ml-64 sm:mt-14 flex justify-end">
  <a href="<?= base_url('course'); ?>" type="button"
    class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">BACK
  </a>
</div>

<div class="pr-16 mt-14 sm:mr-8 sm:ml-80 sm:mt-4 flex justify-center items-center">
  <div class="flex items-center justify-center shadow-lg px-8 py-4">
    <form class="w-full max-w-lg" method="post" action="addcourse">
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
            Course Name
          </label>
          <input
            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            id="grid-first-name" type="text" name="course" placeholder="BCA">
            <div class="pl-4 text-red-600">
            <?php
            if (isset($validation) && $validation->hasError('course')) {
              echo $validation->getError('course');
            }
            ?>
          </div>
        </div>
  

        <div class="w-full md:w-1/2 px-3 ">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
            Department
          </label>
          <div class="relative">
            <select
              class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="grid-state" name="department">
              <?php foreach ($departmentsArray as $department): ?>
                <option value="<?= $department['id']; ?>"><?= $department['d_name']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>

        <div class="w-full px-3  mt-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
            Duration
          </label>
          <div class="relative">
            <select
              class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="grid-state" name="duration">
              <option value="1 year">1 year</option>
              <option value="2 years">2 Years</option>
              <option value="3 years">3 Years</option>
            </select>
          </div>
        </div>


        <div class="w-full px-3 py-4">
          <label for="message" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
            Description
          </label>
          <textarea id="message" rows="4"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            placeholder="Department Description..." name="description">
              </textarea>
              <div class="pl-4 text-red-600">
            <?php
            if (isset($validation) && $validation->hasError('description')) {
              echo $validation->getError('description');
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







<?= $this->endSection(); ?>