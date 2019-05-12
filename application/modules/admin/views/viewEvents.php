<div class="block">
    <div class="block-header block-header-default" style="margin-top:70px;">
        <h2 class="block-title">View Events</h2>
        <?php
                    if($this->session->flashdata('message'))
                    {
                        echo '
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>'.$this->session->flashdata("message").'
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        ';
                    }
        ?>
        <div class="block-options">
            <div class="block-options-item">
            
            </div>
        </div>
    </div>
    
    <div class="block-content">
        <div class="table-responsive">
        <table class="table table-striped table-vcenter">
            <thead>
                <tr>
                    <!-- <th class="text-center" style="width: 100px;"><i class="si si-user"></i></th> -->
                    <th style="width: 30%;">Event ID</th>
                    <th style="width: 15%;">Event Name</th>
                    <th style="width: 15%;">Event Details</th>
                    <th style="width: 15%;">Event Location</th>
                    <th style="width: 15%;">Event Date</th>
                    <th class="text-center" style="width: 100px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                
                    <!-- <td class="text-center">
                        <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar12.jpg" alt="">
                    </td> -->
                    <?php
                        // print_r($events);
                        foreach ($events as $event) {
                            # code...
                            echo "<tr>";
                            echo "<td class='font-w600'>" . $event['event_id'] . "</td>";
                            echo "<td>" . $event['item_name'] . "</td>";
                            echo "<td>" . $event['item_info'] . "</td>";
                            echo "<td>" . $event['location'] . "</td>";
                            echo "<td>" . $event['date'] . "</td>";
                            echo "<td class='text-center'>";
                            echo "<div class='btn-group'>";
                                echo '<button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete">';
                                echo '<a href="'.base_url().'admin/deleteEvent/'.$event['event_id'].'"><i class="fa fa-times"></i></a>';
                                echo '</button>';
                            echo "</div>";
                            echo "</td>";
                            echo "</tr>";
                        }
                            
                    ?>
                    
                
            </tbody>
        </table>
        </div>
    </div>
</div>