import { mount } from '@vue/test-utils'
import Developers from '@/Developers.vue'
import Vue from 'vue'

it('shows developers', async () => {
    const wrapper = mount(Developers);

    await Vue.nextTick()
})
