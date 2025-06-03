<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Applicant $applicant
 */
?>

<!--Header-->


<div class="row text-body-secondary">
	<div class="col-10">
		<h1 class="my-0 page_title"><?php echo $title; ?></h1>
		<h6 class="sub_title text-body-secondary"><?php echo $system_name; ?></h6>
	</div>
	<div class="col-2 text-end">
		<div class="dropdown mx-3 mt-2">
			<button class="btn p-0 border-0" type="button" id="orederStatistics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fa-solid fa-bars text-primary"></i>
			</button>
				<div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
            <?= $this->Html->link(__('List Applicants'), ['action' => 'index'], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?>
				</div>
		</div>
    </div>
</div>
<div class="line mb-4"></div>
<!--/Header-->

<div class="card rounded-0 mb-3 bg-body-tertiary border-0 shadow">
    <div class="card-body text-body-secondary">
            <?= $this->Form->create($applicant) ?>
            <fieldset>
                <legend><?= __('Add Applicant') ?></legend>

                <div class="row">
                    <div class="col-md-12"><?php echo $this->Form->control('fullname'); ?></div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <?php echo $this->Form->control('email'); ?>
                    </div>
                    <div class="col-md-6">
                        <?php echo $this->Form->control('password'); ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                    <?php 
echo $this->Form->control('phonenumber', [
    'type' => 'text',
    'label' => 'Phone Number',
    'placeholder' => '+60XXXXXXXXX',
    'class' => 'form-control phone-input',
    'value' => '+60' // Pre-fill with +60 for user convenience
]); 
?>
                    </div>
                    <div class="col-md-6">
                        <?php echo $this->Form->control('dob'); ?>
                    </div>
                </div>
                    
                    <?php echo $this->Form->control('address'); ?>

                    <div class="row">
                    <div class="col-md-6">
                        <?php echo $this->Form->control('gender', [
                            'type' => 'select',
                            'options' => [
                                'Male' => 'Male',
                                'Female' => 'Female'
                            ],
                            'empty' => 'Select Gender',
                            'class' => 'form-control'
                        ]);?>
                    </div>
                    <div class="col-md-6">
                    <?php echo $this->Form->control('status', [
                        'type' => 'select',
                        'options' => [
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                        
                            ],
                        'class' => 'form-select custom-select', 
                        'label' => 'Status'
                        ]); ?>
                    </div>
                    </div>
                
                    <div class="div">
                    <?php echo $this->Form->control('picture', [
                        'type' => 'file',
                        'class' => 'form-control-file', 
                        'label' => 'Upload Profile Picture',
                        'placeholder' => 'Choose a file',
                        ]);?>
                    </div>

                
               
            </fieldset>
				<div class="text-end">
				  <?= $this->Form->button('Reset', ['type' => 'reset', 'class' => 'btn btn-outline-warning']); ?>
				  <?= $this->Form->button(__('Submit'),['type' => 'submit', 'class' => 'btn btn-outline-primary']) ?>
                </div>
        <?= $this->Form->end() ?>
    </div>
</div>