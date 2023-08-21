function CalcTotal()
{
    var item1 = document.getElementById("item1").value;
    console.log(item1);
    var item2 = document.getElementById("item2").value;
    document.getElementById("total").value = parseInt(item1) * parseInt(item2);
}
function balpaid_amt()
{
    var paid_amt = document.getElementById("paid_amt").value;
    var job_value = document.getElementById("job_value").value;
    document.getElementById("balance").value = parseInt(job_value)-parseInt(paid_amt);
}

