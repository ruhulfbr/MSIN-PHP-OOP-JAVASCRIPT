<script type="text/javascript">
	
	function totalNum(a,b){
		this.x = a;
		this.y = b;
		this.sum = function(){
			return this.x + this.y;
		}
	}
	function totalPoduct(a,b){
		this.x = a;
		this.y = b;
		this.product = function(){
			return this.x*this.y;
		}
	}

totalNum.prototype = new totalPoduct();
	var tn = new totalNum(10,20);
	document.write(tn.product());
</script>