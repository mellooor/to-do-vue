<template>
    <div class="w-100 min-h-screen">
        <div
            class="flex flex-col justify-evenly w-100 min-h-screen bg-blue-100 items-center justify-center"
            v-for="item in toDoItems" :key="item.id"
        >
            <to-do-item
                :toDoItem="item"
            ></to-do-item>
        </div>
    </div>
</template>

<script>
import ToDoItem from "./to-do-item";
export default {
    name: "to-do-item-list",
    components: {ToDoItem},
    data () {
        return {
            toDoItems: null,
        }
    },
    mounted () {
        axios
            .get('http://api.to-do.com/v1/to-do-items')
            .then(response => (this.toDoItems = response.data.data))
    }
}
</script>

<style scoped>

</style>
