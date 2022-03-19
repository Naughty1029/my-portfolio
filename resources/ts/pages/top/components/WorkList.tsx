import { WorkItem } from './WorkItem'
import { useEffect } from 'react'
import axios from 'axios'

type Works = {
    id: number
    title: string
    comment: string
    url: string
    github: string | null
}

type Props = {
    updateWorks: (data: any) => void
    works: Works[]
}

export const WorkList: React.VFC<Props> = ({ updateWorks, works }) => {
    const getWorks = () => {
        axios.get('api/works').then((res) => {
            updateWorks(res.data)
        })
    }

    useEffect(() => {
        getWorks()
    }, [])

    return (
        <ul className="workLists">
            {works.map((work) => (
                <WorkItem key={work.id} work={work} />
            ))}
        </ul>
    )
}
