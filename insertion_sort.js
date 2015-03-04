<script type="text/javascript">
var x = [];
for(k=0;k<100;k++)
{
	x.push(Math.floor(Math.random()*10000));
}


for(i=1;i<x.length;i++)
{
	for(j=i;j>0;j--)
	{
		if(x[j] < x[j-1])
		{
			var temp = x[j]; //temp is x[j]
			x[j] = x[j-1]; // x[j] is x[j-1]
			x[j-1] = temp; //x[j-1] is temp (old x[j] val)
		}
	}
}
console.log(x);
</script>