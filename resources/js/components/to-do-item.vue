<template>
    <div id="to-do-item" class="flex flex-col w-2/3 max-h-40 bg-yellow-100 shadow-md border border-gray">
        <div id="to-do-item-header" class="flex w-full pt-2">
            <div id="header-end" class="flex w-full pr-4 justify-end">
                <font-awesome-icon icon="fa-solid fa-trash-can" />
            </div>
        </div>
        <div id="to-do-item-content" class="pt-2 px-4">
            <p class="text-sm">{{ toDoItem.content }}</p>
        </div>
        <div id="to-do-item-footer" class="py-2 px-4">
            <p class="text-xs italic">{{ toDoItem.created_at }}</p>
        </div>
    </div>
</template>

<script>
export default {
    name: "to-do-item",
    props: {
        toDoItem: Object,
    }
}
</script>

<style scoped>

</style>
