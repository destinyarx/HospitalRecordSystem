<h1 class="text-center" id="label-record"> Records</h1>

<p class="border border-success rounded-4"> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." </p>



<div class="d-flex justify-content-center d-inline-block">
    <div class="d-inline-block justify-content-center border border-success  rounded-4">
        <div class="p-0">
            <table class="table table-hover ">
                        <thead class="thead-light">
                            <tr>
                                <th >Name</th>
                                <th >Age</th>
                                <th >Disease</th>
                            </tr>
                        </thead>
                                                    
                        <tbody>                                   
                            <?php foreach($record as $row){ ?> 
                                <tr class="row100 body">
                                    <td ><?= $row["patient_name"]; ?> </td>
                                    <td ><?= $row["patient_age"]; ?> </td>
                                    <td ><?= $row["patient_disease"]; ?> </td>
                                </tr>
                            <?php } ?>
                        </tbody>                            
            </table>
        </div> 
    </div>
</div>





    
        
    


        

                        
                   

                    
