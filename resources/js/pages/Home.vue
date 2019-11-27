<template>
    <div class="flex flex-col flex-grow">
        <h2 class="text-3xl font-light text-primary">My Projects</h2>
        <div class="flex flex-col w-100">
            <div class="mt-4">
                <h4 class="font-bold">Main</h4>
                <div class="flex flex-row flex-wrap">
                <!-- @if($www)
                @foreach($www as $link)
                    <div class="flex w-1/2 md:w-1/3 lg:w-1/4 project primary">
                        <a href="{{$link['link']}}" target="_blank" class="bg-white hover:bg-red-100 transition-bg shadow flex-grow m-2 py-4 px-8 pl-12">
                            {{$link['name']}}
                        </a>
                    </div>
                @endforeach
                @endif -->
                </div>
            </div>

            <div class="mt-8">
                <h4 class="font-bold">Other</h4>
                <div class="flex flex-row flex-wrap">
                <!-- @if($projects)
                @foreach($projects as $link)
                    <div class="flex w-1/2 md:w-1/3 lg:w-1/4 project purple">
                        <a href="{{$link['link']}}" target="_blank" class="bg-white hover:bg-purple-100 transition-bg shadow flex-grow m-2 py-4 px-8 pl-12">
                            {{$link['name']}}
                        </a>
                    </div>
                @endforeach
                @endif -->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
        }
    }
}
</script>
