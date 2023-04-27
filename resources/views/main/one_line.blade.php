<?php
ini_set('memory_limit', '-1');
?>
@extends('layouts.app')

@section('content')

<!-- Main content -->

<section class="content">
    <div class="container-fluid p-3">
        <div class="row">
            <div class="col-12">

                {{-- @livewire('one', [
                'date' => $date,'id' => $id]) --}}

                <div wire:poll.750ms>
                    <livewire:one :date="$date" :id="$id">
                </div>

            </div>
        </div>
    </div>
</section>

<script>
    function showTime() {
                var date = new Date().toLocaleTimeString(
                    "en-US", {
                        hour: "2-digit",
                        minute: "2-digit",
                        second: "2-digit"
                    },
                    Intl.DateTimeFormat().resolvedOptions().timeZone
                );
                document.getElementById("time").innerHTML = date;
            }
            setInterval(showTime, 1000);

            // setTimeout(function(){
            // window.location.reload(1);
            // }, 5000);
</script>

@endsection