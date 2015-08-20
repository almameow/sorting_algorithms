<script type="text/javascript">

var x= [];
for(k=0;k<10000;k++)
{
	x.push(Math.floor(Math.random()*10000));
}

for(i=x.length-1;i>0;i--)
{

	for(j=0;j<i;j++)
	{
		if(x[j] > x[j+1])
		{
			var temp = x[j];
			x[j] = x[j+1];
			x[j+1] = temp;
		}
	}
}

console.log(x);

</script>