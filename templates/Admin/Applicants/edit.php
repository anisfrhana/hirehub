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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $applicant->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $applicant->id), 'class' => 'dropdown-item', 'escapeTitle' => false]
            ) ?>
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
                <legend><?= __('Edit Applicant') ?></legend>
                
                    <?php echo $this->Form->control('fullname'); ?>
                    <?php echo $this->Form->control('email'); ?>
                    <?php echo $this->Form->control('password'); ?>
                    <?php echo $this->Form->control('phonenumber'); ?>
                    <?php echo $this->Form->control('dob'); ?>
                    <?php echo $this->Form->control('address'); ?>
                    <?php echo $this->Form->control('gender', [
                            'type' => 'select',
                            'options' => [
                                'Male' => 'Male',
                                'Female' => 'Female'
                            ],
                            'empty' => 'Select Gender',
                            'class' => 'form-control'
                        ]);?>
                        
                    <?php echo $this->Form->control('status', [
                        'type' => 'select',
                        'options' => [
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                        
                            ],
                        'class' => 'form-select custom-select', 
                        'label' => 'Status'
                        ]); ?>
               
            </fieldset>
				<div class="text-end">
				  <?= $this->Form->button('Reset', ['type' => 'reset', 'class' => 'btn btn-outline-warning']); ?>
				  <?= $this->Form->button(__('Submit'),['type' => 'submit', 'class' => 'btn btn-outline-primary']) ?>
                </div>
        <?= $this->Form->end() ?>
    </div>
</div>