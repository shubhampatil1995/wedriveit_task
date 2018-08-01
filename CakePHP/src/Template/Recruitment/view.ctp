<div class="container">
	<div class="row">
		<div class="col-md-9">
			<table class="table table-bordered">
				<tr>
					<th class="text-center">Job Post</th>
					<th class="text-center">Req. Experience</th>
					<th class="text-center">Employment Type</th>
					<th class="text-center">CTC</th>
					<th class="text-center">Job Description</th>
					<th class="text-center">Skills Req.</th>
					<th class="text-center">Qualification</th>
				</tr>
				<?php foreach ($recruitment as $row): ?>
					<tr>
						<td> <?= $row->job_post; ?> </td>
						<td> <?= $row->req_exp; ?> </td>
						<td> <?= $row->emp_type; ?> </td>
						<td> <?= $row->ctc_pa; ?> </td>
						<td> <?= $row->job_desc; ?> </td>
						<td> <?= $row->skills_req; ?> </td>
						<td> <?= $row->qualification; ?> </td>
					</tr>
				<?php endforeach; ?>
			</table>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>