@extends ('layouts.layout') @section('content')
<style>
    .listings-page {
        font-family: "Gilroy", sans-serif;
    }
    .listing-cards {
        padding: 3rem;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        gap: 2rem;
        height: min-content;
    }
    .listing-card {
        width: 24rem;
        background-color: #ffffff;
        padding: 1rem;
        border-radius: 2rem;
        box-shadow: 0 4px 8px 0 rgba(0, 128, 64, 0.3),
            0 6px 20px 0 rgba(0, 128, 64, 0.29);
        cursor: pointer;
    }
    .listing-card:hover {
        box-shadow: 0 4px 16px 0 rgba(0, 128, 64, 0.3),
            0 6px 28px 0 rgba(0, 128, 64, 0.29);
        transform: translateY(-8px);
        transition: all 0.5s;
    }
    .listing-img {
        border-radius: 2rem;
        width: 100%;
        height: 16rem;
        object-fit: cover;
        object-position: center;
    }
    .listing-owner {
        padding-top: 1rem;
        font-weight: 500;
    }
    .listing-dept {
        font-weight: 400;
    }
</style>
<div class="listings-page">
    <div class="listing-cards"></div>
</div>

<script>
    const imglinks = [
        "https://images.pexels.com/photos/5465057/pexels-photo-5465057.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
        "https://images.pexels.com/photos/5464921/pexels-photo-5464921.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
        "https://images.pexels.com/photos/100582/pexels-photo-100582.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
        "https://images.pexels.com/photos/276517/pexels-photo-276517.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
        "https://images.pexels.com/photos/190335/pexels-photo-190335.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
        "https://images.pexels.com/photos/2256137/pexels-photo-2256137.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
        "https://images.pexels.com/photos/3370153/pexels-photo-3370153.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
    ];
    const bicycleModels = [
        "Roadster R123",
        "Mountain Bike M456",
        "Hybrid H789",
        "Touring T246",
        "Fixie F159",
        "Commuter C753",
        "BMX B159",
    ];
    const ownerNames = [
        "Ramesh Kumar",
        "Sita Devi",
        "Suresh Babu",
        "Lakshmi Menon",
        "Vikram Aditya",
        "Vijaya Lakshmi",
        "Ravi Shankar",
    ];
    const engineeringDepartments = [
        "Computer Science and Engineering",
        "Electrical and Electronics Engineering",
        "Electronics and Communication Engineering",
        "Civil Engineering",
        "Mechanical Engineering",
        "Computer Science and Engineering",
        "Mechanical Engineering",
    ];

    const cardList = document.querySelector(".listing-cards");
    for (let i = 0; i < imglinks.length; i++) {
        const cycle = imglinks[i];
        cardList.insertAdjacentHTML(
            "beforeend",
            `
        <div class="listing-card">
            <img src="${cycle}" alt="" class="listing-img">
            <h1 class="listing-title">${bicycleModels[i]}</h1>
            <h2 class="listing-owner">${ownerNames[i]}</h2>
            <h3 class="listing-dept">${engineeringDepartments[i]}</h3>
        </div>
        `
        );
    }
</script>

@endsection
