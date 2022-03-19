import { SearchForm } from './components/SearchForm'
import { WorkList } from './components/WorkList'
import { useState } from 'react'

type Works = {
    id: number
    title: string
    comment: string
    url: string
    github: string | null
}

export const TopPage: React.VFC = () => {
    const [works, setWorks] = useState<Works[]>([])
    const updateWorks = (data: Works[]): void => setWorks(data)

    return (
        <main id="top">
            <SearchForm works={works} />
            <WorkList works={works} updateWorks={updateWorks} />
        </main>
    )
}
