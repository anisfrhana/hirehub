<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Application $application
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
							<li><?= $this->Html->link(__('Edit Application'), ['action' => 'edit', $application->id], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
				<li><?= $this->Form->postLink(__('Delete Application'), ['action' => 'delete', $application->id], ['confirm' => __('Are you sure you want to delete # {0}?', $application->id), 'class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
				<li><hr class="dropdown-divider"></li>
				<li><?= $this->Html->link(__('List Applications'), ['action' => 'index'], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
				<li><?= $this->Html->link(__('New Application'), ['action' => 'add'], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
							</div>
		</div>
    </div>
</div>
<div class="line mb-4"></div>
<!--/Header-->

<div class="row">
	<div class="col-md-8">
		<div class="card rounded-0 mb-3 bg-body-tertiary border-0 shadow">
			<div class="card-body text-body-secondary">

            <style>
    @page {
        margin: 20px !important; 
        padding: 0px !important;
    }

    body {
        font-family: 'Arial', sans-serif;
        font-size: 13px; 
        color: #333; 
        line-height: 1.6; 
        margin: 0;
        padding: 0;
    }

    .right {
        text-align: right;
        padding-right: 50px;
    }

    .top {
        width: 100%;
        margin: auto;
    }

    =
    .one {
        width: 70%;
        height: 30px;
        background: #003366; */
        float: left;
        color: white; 
        text-align: center;
        line-height: 30px; 
        font-weight: bold;
    }

    .two {
        margin-left: 15%;
        height: 30px;
        background: #006699; 
        color: white; 
        text-align: center;
        line-height: 30px; 
        font-weight: bold;
    }

    .justify {
        text-align: justify;
    }

    .content {
        margin-left: 70px;
        margin-right: 70px;
    }

    
    .qr {
        width: 100px;
        margin-top: 10px;
    }

    
    h1, h2, h3 {
        font-size: 16px;
        font-weight: bold;
        color: #003366; 
        margin-bottom: 15px;
    }

    p {
        margin-bottom: 15px;
    }

   
    ul {
        list-style-type: none;
        padding-left: 0;
    }

    ul li {
        margin-bottom: 10px;
    }

    
    table {
        width: 100%;
        margin-top: 20px;
        border-collapse: collapse;
    }

    table th, table td {
        padding: 8px 12px;
        border: 1px solid #ddd;
        text-align: left;
    }

    table th {
        background-color: #f1f1f1; 
        font-weight: bold;
    }

   
    .signature {
        margin-top: 40px;
        font-size: 14px;
        text-align: right;
    }

    .signature span {
        font-weight: bold;
    }

    
    .footer {
        text-align: center;
        font-size: 12px;
        color: #666;
        margin-top: 20px;
    }

</style>



                <section class="top">
                    <div class="one"></div>
                    <div class="two"></div>
                </section>

                <div class="text-end my-4 me-5">
                    <?php echo $this->Html->image('../img/surat/hhlogo.png',['width'=>'200px']) ?>
                </div> 

                <hr />

                <table width="100%">
                    <tr>
                        <td width="80%" class="text-end"> Surat Kami &nbsp;: &nbsp; </td>
                            <td>
                            <?= h($application->reference_no) ?>
                                
                            </td>
                    </tr>

                    <tr>
                        <td class="text-end"> Tarikh &nbsp;: &nbsp;</td>
                        <td>
                        <?php if ($application->status == 0){
                                    echo '-';
                                } elseif ($application->status == 1){
                                    echo date('d F Y' , strtotime ($application->modified));
                                }else 
                                    echo 'Rejected';
                                ?>
                        </td>
                    </tr>
                </table>


                <?= h($application->company_name) ?><br />
                <?= h($application->street_1) ?><br />
                <?= h($application->street_2) ?><br />
                <?= h($application->postcode) ?><br />
                <?= h($application->city) ?><br />
                <strong><?= h($application->state) ?></strong>
                <br /><br />
                <strong>Job Offer for the Position of <?= h($application->job->position) ?> at <?= h($application->company_name) ?>  </strong>
                <br /><br />
                <strong>Dear : <?= h($application->pic_name) ?> (<?= h($application->pic_email) ?>)</strong>
                <br /><br />

                
                <table class ="table table-bordered table-sm table_transparent">
                    
                    <tr>
                        <td>Position</td>
                        <td> : </td>
                        <td> <?= h($application->job->position) ?> </td>
                    </tr>
                    <tr>
                        <td> Department </td>
                        <td> : </td>
                        <td> <?= h($application->job->company_department) ?></td>
                    </tr>
                    <tr>
                        <td> Start Date </td>
                        <td> : </td>
                        <td><?= h($application->start_date) ?></td>
                    </tr>
                    <tr>
                        <td> End Date </td>
                        <td> : </td>
                        <td><?= h($application->end_date) ?></td>
                    </tr>
                    
                    <tr>
                        <td> Application Reference No </td>
                        <td> : </td>
                        <td> <?= h($application->reference_no) ?></td>
                    </tr>
                    <tr>
                        <td> Status </td>
                        <td> : </td>
                        <td><?php
$statusMap = [
    0 => 'Pending',
    1 => 'Approved',
    2 => 'Rejected',
];

$statusText = isset($statusMap[$application->status]) ? $statusMap[$application->status] : 'Unknown';
?>

<?= h($statusText) ?></td>
                    </tr>

                </table>


                <br />

                <div class="justify">
                Kindly be advised that the individual named above is an employee of <?= h($application->company_name) ?>.
                    <br /><br />
                    &nbsp; &nbsp;&nbsp; &nbsp; As part of your employment, you will be expected to fulfill the duties and responsibilities outlined in the job description and will be part of a dynamic team working towards <b><?= h($application->company_name) ?></b>. You will also be required to adhere to our company policies, procedures, and work standards.
                    <br /><br />
                    Please confirm your acceptance of this offer by signing and returning a copy of this letter. Once we receive your signed acceptance, we will begin preparing your onboarding process and provide you with further instructions regarding your first day at the company.
                    <br /><br />
                    If you have any questions or require further information, please feel free to contact us. We look forward to working with you and are confident that your skills and experience will be a great addition to our team. Welcome aboard!

                    <br /><br />
                    Sincerely,
                    <br />
                    <?php if ($application->status == 0){
                        echo '<strong class = "text-danger">[In Process]</strong>';
                    } elseif ($application->status == 1){
                        echo 'Hire Hub<br /><br /><br />';
                        echo '<strong>NO SIGNATURE IS REQUIRED</STRONG>';
                    } else
                        echo 'Rejected';
                    ?>
                </div>

                <hr/>

                
                <div class="text-end me-4">
                    <?php echo $this->Html->image('../img/surat/iso.png',['width'=>'90px']) ?>

                </div> 

     <!--table responsive-->  

			</div>
		</div>
	</div>
    
	<div class="col-md-4">
	  <div class="card bg-body-tertiary border-0 shadow rounded-5">
        <div class="card-body">

            <div class="card-title mb-0">Application Data</div>
            <div class="tricolor_line mb-3"></div>

            <table class="table table-sm table-hover">
                <tr>
                    <td>Application Date</td>
                    <td><?php echo date('M d, Y (H:i A)', strtotime($application->created)); ?></td>
                </tr>
                <tr>
                    <td>Approval Date</td>
                    <td><?php echo date('M d, Y (H:i A)', strtotime($application->modified)); ?></td>
                </tr>
                <tr>
                    <td>Application Status</td>
                    <td>
                        <?php if ($application->status == 0) {
							echo '<span class=""badge bg-danger">Pending</span>';
						}elseif ($application->status == 1) {
							echo '<span class="badge bg-success">Approved</span>';
						} elseif ($application->status == 2) {
							echo '<span class="badge bg-danger"Rejected</span>';
						} else '<span class="badge bg-danger"Error</span>';
						?>
                    </td>
                </tr>
            </table>

            <?php if ($application->status == 1) {?>

            <?php echo $this->Html->link(('Download PDF'), ['action'=>'pdf', $application->id], ['class'=>'btn btn-sm btn-outline-primary', 'escapeTitle' =>false] ); ?>
            <?php } ?>
            
        </div>
      </div>
	</div>
</div>




