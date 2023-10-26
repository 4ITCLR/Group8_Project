@model AnalagoueMafia.Models.EditCustomerInfo
@{


   
}


<h1>Confirm your details</h1>



<br></br>
<form method="post" action="Customer_Info">
    <div class="mb-3">
        <label for="" class="form-label">Email</label>
        <input type="text" class="form-control" asp-for="Email" readonly>
        <input type="text" class="form-control" asp-for="Password" hidden>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Full Name:</label>
        <input type="text" class="form-control" asp-for="FullName">

    </div>

    <div class="mb-3">
        <label for="" class="form-label">Contact Number</label>
        <input type="number" class="form-control" asp-for="Number">

    </div>


    <div class="mb-3">
        <label for="" class="form-label">Instagram Handle</label>

        <input type="text" class="form-control" asp-for="Instagram_Handle">

    </div>

    <div class="mb-3">
        <label for="" class="form-label">Address</label>

        <input type="text" class="form-control" asp-for="Address">

    </div>

    <button type="submit" class="btn btn-primary">Submit</button>



</form>

