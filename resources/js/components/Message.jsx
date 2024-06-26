import React, { useState, useEffect } from 'react';


const MessagesComponent = () => {
    const [messages, setMessages] = useState([]);
    const [offset, setOffset] = useState(0);
    const [status, setStatus] = useState('kritik');
    const [notif, setNotif] = useState(false);
    const [pesan, setPesan] = useState([]);

    useEffect(() => {
        fetchMessages();
        const storedSuccessMessage = localStorage.getItem('success_message');
        console.log(storedSuccessMessage);
    }, [status]);


    const fetchMessages = () => {
        fetch(`/messages/fetch/${offset}/${status}`)
            .then(response => response.json()).then(data => {
                if (!data.messages.length == 0) { 
                    setMessages([...data.messages]);
                    setOffset(prevOffset => prevOffset + data.messages.length);
                }
            })
            .catch(error => {
                console.error('Error fetching messages', error);
            });
    };

    const decreseMessages = (offsets) => {
        fetch(`/messages/fetch/${offsets}/${status}`)
            .then(response => response.json()).then(data => {
                if (!data.messages.length == 0) { 
                    setMessages([...data.messages]);
                    setOffset(offset - data.messages.length);
                }
            })
            .catch(error => {
                console.error('Error fetching messages', error);
            });
    }

    const loadMore = () => {
        if (messages && messages.length > 0) {
            fetchMessages();
        }
    };

    const handleScroll = () => {
        const windowHeight = "innerHeight" in window ? window.innerHeight : document.documentElement.offsetHeight;
        const body = document.body;
        const html = document.documentElement;
        const docHeight = Math.max(body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight);
        const windowBottom = windowHeight + window.scrollY;
        if (windowBottom >= docHeight) {
            loadMore();
        }
    }

    const back = () => {
        decreseMessages(offset-14);
    }

    const kritik = () => {
        setStatus('kritik');
        fetchMessages();
        setOffset(0);
    }
    const menfess = () => {
        setStatus('menfess');
        fetchMessages();
        setOffset(0);
    }

    return (
        <>
        <div class="container">

        </div>
        {
            notif ? <div class={`b2`}>
            <div class="card_message">
                <div class="from">
                    <h2>From : {pesan.from}</h2>
                </div>
                <div class="to">
                    <h2>to : {pesan.to}</h2>
                </div>
                <div class="mess">
                    <p>{pesan.pesan}</p>
                </div>
                <button class="mess_button" onClick={() => setNotif(!notif)}><ion-icon name="arrow-forward-outline"></ion-icon></button>
            </div>
        </div> : ''
        }
        <div className="box">
            <div className="option_box">
                <button onClick={kritik} className="comic-button">
                    kritik siswa
                </button>
                <button onClick={menfess} className="comic-button">
                    menfess
                </button>
            </div>
            <div className="letter_box" id="letterBox">
            {messages.map(message => (
                <div className="card" key={message.id}>
                    <div className="text">
                        <p className="subtitle">{message.pesan}</p>
                    </div>
                    <div className="btn_view">
                        <button onClick={() => {setNotif(!notif); setPesan(message); console.log(me)}}><ion-icon name="mail-unread-outline"></ion-icon></button>
                    </div>
                </div>
            ))}
        
            </div>
            <div className="pagechose">
                <div className="btn_chose">
                    <button onClick={back}><ion-icon name="arrow-back-outline"></ion-icon></button>
                </div>
                <div className="btn_chose">
                    <button onClick={loadMore}><ion-icon name="arrow-forward-outline"></ion-icon></button>
                </div>
            </div>
        </div>
        </>
    );
};


export default MessagesComponent;
