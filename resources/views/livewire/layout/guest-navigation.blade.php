<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<div  class="max-w-3xl mx-auto pt-12 sticky top-0  z-10">
 <div class="navbar bg-content rounded-3xl backdrop-blur-lg">
  <div class="flex-1">
    <a class="btn btn-ghost bg-textColor rounded-s-full text-bkg text-xl hover:bg-bkg hover:text-textColor">Soma</a>
  </div>
  <div class="flex-none gap-2  ">
    <div class="form-control">
      <input type="text" placeholder="Search" class="input input-bordered w-24 bg-content-bg  md:w-auto" />
    </div>
    <div class="dropdown dropdown-end  ">
      <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full">
          <img alt="Tailwind CSS Navbar component" src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
        </div>
      </div>
      <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-content-bg  rounded-box w-52">
        <li>
          <a class="justify-between">
            Profile
            <span class="badge">New</span>
          </a>
        </li>
        <li><a>Settings</a></li>
        <li><a>Logout</a></li>
      </ul>
    </div>
  </div>
</div>
</div>
