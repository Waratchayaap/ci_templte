
<br>
<div class="container">
  <div class="col-md-7">
    <h4>Show Mamber</h4>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>id</th>
                <th>img</th>
                <!-- <th>position</th> -->
                <th>name</th>
                <th>lname</th>
                <!-- <th>level</th> -->
                <th>datebase</th>
                <th>edit</th>
                <th>delete</th>


            </tr>
        </thead>
        <tbody>
           <?php foreach ($query as $rs) { ?>
            <tr> 
                <th><?php echo $rs->m_id;?></th>
                <th>
                  <img src="<?php echo base_url('img');?>/<?php echo $rs->m_img;?>" width="100px">
                </th>
                <!-- <th><?php echo $rs->pname;?></th> -->
                <th><?php echo $rs->m_name;?></th>
                <th><?php echo $rs->m_lname;?></th>
                <!-- <th><?php echo $rs->m_level;?></th> -->
                <th><?php echo $rs->m_datesave;?></th>
                <th><a href="<?php echo site_url('insertdata/edit/').$rs->m_id;?>">edit</th>
                <th><a href="<?php echo site_url('insertdata/delete/').$rs->m_id;?>" onclick="return confirm('ยีนยัน');">delete</a></th>
            </tr>
          <?php } ?>
        </tbody>
        </table>
        </div>
      </div>
  </div>
