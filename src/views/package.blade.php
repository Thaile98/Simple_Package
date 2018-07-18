<div class="container">
	<h1>You have {{count($links)}} link(s)</h1>
    <div class="col-md-8">
        <ul class="list-group">
        @foreach($links as $link)
        	<li class="list-group-item">{{$link->link}}</li>

         @endforeach
        </ul>
    </div>
</div>