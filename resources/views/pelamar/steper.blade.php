 <div class="step {{ request()->is('apps/registration/biodata') ? 'active' : '' }}">
     <button type="button" class="step-trigger">
         <span class="bs-stepper-circle">
             <span class="fas fa-user"></span>
         </span>
         <span class="bs-stepper-label {{ request()->is('apps/registration/biodata') ? 'text-primary' : '' }}">Biodata</span>
     </button>
 </div>
 <div class="bs-stepper-line"></div>

 <div class="step {{ request()->is('apps/registration/formasi') ? 'active' : '' }}">
     <button type="button" class="step-trigger">
         <span class="bs-stepper-circle">
             <span class="fas fa-building"></span>
         </span>
         <span class="bs-stepper-label {{ request()->is('apps/registration/formasi') ? 'text-primary' : '' }}">Formasi</span>
     </button>
 </div>
 <div class="bs-stepper-line"></div>

 <div class="step {{ request()->is('apps/registration/upload') ? 'active' : '' }}">
     <button type="button" class="step-trigger">
         <span class="bs-stepper-circle">
             <span class="fas fa-upload"></span>
         </span>
         <span class="bs-stepper-label {{ request()->is('apps/registration/upload') ? 'text-primary' : '' }}">Upload Berkas</span>
     </button>
 </div>
 <div class="bs-stepper-line"></div>

 <div class="step  {{ request()->is('apps/registration/resume') ? 'active' : '' }}">
     <button type="button" class="step-trigger">
         <span class="bs-stepper-circle">
             <span class="fas fa-check"></span>
         </span>
         <span class="bs-stepper-label {{ request()->is('apps/registration/finishing') ? 'text-primary' : '' }}">Resume</span>
     </button>
 </div>
