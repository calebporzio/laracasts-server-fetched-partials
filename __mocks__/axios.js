import users from './users.json'

export default {
    get: jest.fn(() => Promise.resolve({ data: users}))
}
