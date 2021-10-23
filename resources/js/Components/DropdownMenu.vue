<template>
    <Menu as="div" class="relative inline-block text-left">
        <MenuButton
            class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-blue-500 rounded-md hover:bg-opacity-80 focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-opacity-75">
            Drop-down
            <ChevronDownIcon class="w-5 h-5 ml-2 -mr-1 text-gray-200 hover:text-blue-100"/>
        </MenuButton>
        <MenuItems class="absolute left-0 w-56 mt-2 origin-top-left bg-white divide-y divide-gray-100 rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
            <div class="p-1">
                <MenuItem v-slot="{ active }">
                    <Link :class="[
                        active ? 'bg-blue-500 text-white' : 'text-gray-900',
                        'group flex rounded-md items-center w-full p-2 text-sm'
                        ]" as="button">
                        <PencilIcon
                            :class="[
                                active ? 'text-white' : 'text-gray-600',
                            ]"
                            aria-hidden="true"
                            class="w-5 h-5 mr-2"
                        />
                        Edit
                    </Link>
                </MenuItem>
                <MenuItem v-slot="{ active }">
                    <Link :class="[
                        active ? 'bg-blue-500 text-white' : 'text-gray-900',
                        'group flex rounded-md items-center w-full p-2 text-sm'
                        ]" as="button">
                        <DuplicateIcon
                            :class="[
                                active ? 'text-white' : 'text-gray-600',
                            ]"
                            aria-hidden="true"
                            class="w-5 h-5 mr-2"
                        />
                        Duplicate
                    </Link>
                </MenuItem>
            </div>
            <div class="p-1">
                <MenuItem v-slot="{ active }">
                    <Link :class="[
                        active ? 'bg-blue-500 text-white' : 'text-gray-900',
                        'group flex rounded-md items-center w-full p-2 text-sm'
                        ]" as="button">
                        <ArchiveIcon
                            :class="[
                                active ? 'text-white' : 'text-gray-600',
                            ]"
                            aria-hidden="true"
                            class="w-5 h-5 mr-2"
                        />
                        Archive
                    </Link>
                </MenuItem>
                <MenuItem v-slot="{ active }">
                    <Link :class="[
                        active ? 'bg-blue-500 text-white' : 'text-gray-900',
                        'group flex rounded-md items-center w-full p-2 text-sm'
                        ]" as="button">
                        <ExternalLinkIcon
                            :class="[
                                active ? 'text-white' : 'text-gray-600',
                            ]"
                            aria-hidden="true"
                            class="w-5 h-5 mr-2"
                        />
                        Move
                    </Link>
                </MenuItem>
            </div>
        </MenuItems>
    </Menu>
</template>

<script setup>
import {Menu, MenuButton, MenuItems, MenuItem} from "@headlessui/vue";
import {ChevronDownIcon} from "@heroicons/vue/solid";
import {PencilIcon, DuplicateIcon, ArchiveIcon, ExternalLinkIcon} from "@heroicons/vue/outline";
import {Link} from "@inertiajs/inertia-vue3";
</script>

<style scoped>

</style>
